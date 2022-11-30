import { prisma } from "/lib/prisma";

export default async function handler(req, res) {
  const { name, email, organization, phone, prediction } = req.body;

  try {
    // CREATE
    await prisma.Participant.create({
      data: {
        name,
        email,
        organization,
        phone,
        prediction: prediction.value,
      },
    });
    res.status(200).json({ message: "participant Created" });
  } catch (error) {
    if (error) {
      // The .code property can be accessed in a type-safe manner
      if (error.code === "P2002") {
        res.status(400).json({ message: 'Email already in use' });
      }
    }
    throw error
  }
}
